# Neuron AI MCP Extension for Gemini CLI

This is a Gemini CLI extension that leverages the [Neuron AI Framework](https://docs.neuron-ai.dev/) to provide agentic capabilities via the Model Context Protocol (MCP).

## Features

- **Local MCP Server**: A PHP-based MCP server that can be extended with custom tools.
- **Neuron AI Integration**: Easily create and orchestrate AI agents using Neuron AI.
- **Documentation Tool**: Access Neuron AI documentation directly within Gemini CLI.

## Installation

1. Clone this repository.
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Link the extension to Gemini CLI:
   ```bash
   gemini extensions link .
   ```

## Usage

Once linked, you can use the tools provided by this extension in your Gemini CLI sessions. For example:

- Use the `ask_neuron` tool to interact with a Neuron-powered agent.
- Ask Gemini CLI to search the Neuron AI documentation.

## Configuration

Set the following environment variables for full functionality:

- `GEMINI_API_KEY`: Your Google Gemini API key.
- `GEMINI_MODEL`: (Optional) The model to use (defaults to `gemini-1.5-flash`).

## Publishing

To publish this extension to the Gemini CLI gallery:

1. Push this code to a public GitHub repository.
2. Visit [https://geminicli.com/extensions/](https://geminicli.com/extensions/) and submit your repository URL.