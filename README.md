# Cache Bust Plugin for Craft

Adds a file modified timestamp to front-end resources.

## Usage

```<link href="{{ craft.bust.er('/css/application.css') }}" rel="stylesheet">```

Outputs:

```<link href="/css/application.css?1372022079" rel="stylesheet">```

## Option: filename cache busting method

_Note: Requires URL rewriting to work._

```<link href="{{ craft.bust.er('/css/application.css','filename') }}" rel="stylesheet">```

Outputs:

```<link href="/css/application.0f4ee45a.css" rel="stylesheet">```
