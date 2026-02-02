# Neuron AI MCP Extension

This extension integrates the **Neuron AI Framework** with Gemini CLI via the Model Context Protocol (MCP).

## Capabilities

- **ask_neuron**: Ask questions to an AI agent built with Neuron AI.
- **Documentation Access**: Provides direct access to Neuron AI documentation through the `neuron-ai-doc` remote MCP server.

## Setup

1. Ensure you have PHP 8.1+ and Composer installed.
2. Install dependencies:
   ```bash
   composer install
   ```
3. Set your Gemini API key as an environment variable (optional but recommended for full functionality):
   ```bash
   export GEMINI_API_KEY=your_api_key_here
   ```

## Development

- The MCP server is implemented in `server.php`.
- Tools are defined in `src/NeuronElements.php` using PHP attributes.
- You can add more tools by adding methods with the `#[McpTool]` attribute in the `src/` directory.

## About Neuron AI

Neuron AI is a PHP framework for creating and orchestrating AI Agents. For more information, visit [https://docs.neuron-ai.dev/](https://docs.neuron-ai.dev/).
