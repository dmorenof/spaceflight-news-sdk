# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by The Space Devs or the Spaceflight News API.

- The Spaceflight News API and its service names belong to their owners; the MIT license of this SDK grants no rights to them and does not sublicense the API or its terms. The API describes itself as free to use and asks developers to support The Space Devs (<https://thespacedevs.com>).
- The contract in `contract/spaceflight-news.json` is the OpenAPI 3.0.3 document the service publishes at <https://api.spaceflightnewsapi.net/v4/schema/?format=json>, downloaded in November 2026 with three edits, each because the document says something the live service does not do: a `servers` entry for `https://api.spaceflightnewsapi.net` (the document has none); `Author.socials` is nullable (the service answers `null` for most authors, the document says an object); and in `Socials` each `oneOf` of "a URL or an empty string" is an `anyOf` (an empty string matches both branches, so `oneOf` refused every author that has a social account). Nothing else was changed.
- The calls of the quick start, and 300 articles, 300 blogs and 300 reports, were read through the SDK against the live service (November 2026).
- Provided without warranty.
