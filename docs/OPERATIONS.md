# Spaceflight News SDK for PHP: operations

7 operations. Each is a static method of a facade class (`SpaceflightNewsSDK\...`); configure the SDK once with `SpaceflightNewsAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| articles_list | GET | `/v4/articles/` | `V4\Articles::get()` |
| articles_retrieve | GET | `/v4/articles/{id}/` | `V4\Articles::getById()` |
| blogs_list | GET | `/v4/blogs/` | `V4\Blogs::get()` |
| blogs_retrieve | GET | `/v4/blogs/{id}/` | `V4\Blogs::getById()` |
| info_retrieve | GET | `/v4/info/` | `V4\Info::get()` |
| reports_list | GET | `/v4/reports/` | `V4\Reports::get()` |
| reports_retrieve | GET | `/v4/reports/{id}/` | `V4\Reports::getById()` |
