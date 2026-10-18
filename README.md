# PlagDoc

**AI and plagiarism detection for documents, powered by [Plagiarism Checker X](https://plagiarismcheckerx.com).**

PlagDoc lets you check the originality of text documents, receive detailed plagiarism reports, and integrate plagiarism detection directly into your own applications through a simple API.

[![Docs](https://img.shields.io/badge/docs-Apiary-blue)](https://plagdoc.docs.apiary.io)
[![Website](https://img.shields.io/badge/website-plagdoc.com-green)](https://plagdoc.com)

## Features

- **Plagiarism detection**: scan documents for potential matches against existing sources
- **AI content detection**: identify text that may be AI-generated
- **Detailed reports**: retrieve plagiarism reports for every submitted document
- **Easy integration**: add checks to your own app, whether you process one document or large volumes

## Quick Start

### Prerequisites

- PHP `<7.0>` or higher
- An API key (see [Getting an API key](#getting-an-api-key))

### Installation

```bash
<installation command, e.g. composer require vendor/plagdoc>
```

### Usage

```php
<?php

// 1. Initialize the client
$client = new PlagDoc('<YOUR_API_KEY>');

// 2. Submit a document
$submission = $client->submit('Your text to check goes here.');

// 3. Retrieve the report
$report = $client->getReport($submission->id);

echo $report->score;
```

> **Note:** Replace the example above with your actual implementation. See the [API documentation](https://plagdoc.docs.apiary.io) for the exact endpoints and parameters.

## Getting an API key

`<Explain how users obtain a key, e.g. sign up at https://plagdoc.com>`

## API Documentation

The complete API reference, including endpoints, request and response formats, and examples, is available here:

**[plagdoc.docs.apiary.io](https://plagdoc.docs.apiary.io)**

## Support

Questions or need help? Contact the support team at [plagdoc.com](https://plagdoc.com).

## License

`<License name, e.g. MIT>`: see [LICENSE](LICENSE) for details.
