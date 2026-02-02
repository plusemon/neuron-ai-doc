<?php

namespace NeuronApp;

use PhpMcp\Server\Attributes\McpTool;
use PhpMcp\Server\Attributes\Schema;
use NeuronAI\Agent;
use NeuronAI\Providers\Gemini\Gemini;
use NeuronAI\Chat\Messages\UserMessage;

class NeuronElements
{
    /**
     * Ask a question to a Neuron AI Agent.
     *
     * @param string $question The question to ask the agent.
     * @return string The agent's response.
     */
    #[McpTool(name: 'ask_neuron', description: 'Ask a question to a Neuron AI Agent.')]
    public function askNeuron(
        #[Schema(type: 'string', description: 'The question to ask.')]
        string $question
    ): string {
        // For demonstration, we'll return a mock response if no API key is set.
        // In a real scenario, the user would configure their API key.
        $apiKey = getenv('GEMINI_API_KEY');
        
        if (!$apiKey || $apiKey === 'YOUR_API_KEY') {
            return "Neuron AI: I received your question: '$question'. (Please set GEMINI_API_KEY to get a real response from the AI agent).";
        }

        try {
            $agent = new class extends Agent {
                protected function provider(): \NeuronAI\Providers\AIProviderInterface
                {
                    return new Gemini(
                        key: getenv('GEMINI_API_KEY'),
                        model: getenv('GEMINI_MODEL') ?: 'gemini-1.5-flash',
                    );
                }
            };

            $message = $agent->chat(new UserMessage($question));
            return $message->getContent();
        } catch (\Throwable $e) {
            return "Error from Neuron AI Agent: " . $e->getMessage();
        }
    }
}
