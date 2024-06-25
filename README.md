В качестве основы используется Laravel/Passport

/oauth/authorize:
Query-параметры:
    - client_id
    - redirect_uri
    - state
    - response_type

/oauth/token:
form-data:
    ```json
    {
        "grant_type": "",
        "code": "",
        "redirect_uri": "",
        "client_id": "",
        "client_secret": ""
    }
    ```

/api/user (requires authorization token):
Response body: 
    ```json
    {
        "id": 1,
        "name": "Vladislav",
        "email: "mail@mail.com"
    }
    ```
