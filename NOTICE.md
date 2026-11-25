# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by Aplazame.

- Aplazame and its service names belong to their owners; the MIT license grants no rights to them and does not sublicense the Aplazame API or its terms.
- Aplazame publishes **no machine-readable contract**. `contract/aplazame.json` was written by hand from the public documentation at <https://aplazame.com/en/docs/api/> (checkout creation, order confirmation, order API, campaigns API, POS integration, API requests). Parts the documentation leaves open are open here: the answer to `POST /checkout` (read as `{"id": ...}`, as in the POS checkout), the articles of a campaign (not described) and the exact fields of an order returned by `GET /orders/{id}`. The notification Aplazame sends to the merchant (`notification_url`) is modelled (`Notification`, `ConfirmationResponse`) but an SDK cannot receive it: the merchant's server answers it. Check the contract against the documentation before relying on it.
- Using the API requires a private API key from Aplazame and compliance with its terms. The version is chosen by the media type the SDK asks for (`application/vnd.aplazame.v1+json`).
- Provided without warranty.
