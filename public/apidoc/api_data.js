define({ "api": [
  {
    "type": "post",
    "url": "seller/generate-otp",
    "title": "to generate otp.",
    "name": "generateOtp",
    "group": "Login",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n\n  {\n\t    \"mobile\":\"7379273205\"\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n{\n  \"status\": 1,\n  \"message\": \"Otp has been sent to your mobile number\"\n }",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 200 ok\n{\n  \"status\": 0,\n   \"message\": \"Mobile number is not registered\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/login.php",
    "groupTitle": "Login"
  },
  {
    "type": "post",
    "url": "seller/sign-in",
    "title": "to login user.",
    "name": "signIn",
    "group": "Login",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n\t{\n      \"otp\":\"1234\",\n      \"mobile\":\"7379273205\"\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "   HTTP/1.1 200 OK\n{\n \"status\": 1,\n \"data\": {\n     \"id\": 4,\n     \"name\": \"Arun\",\n     \"email\": \"pandeyarunoct@gmail.com\",\n     \"mobile\": \"7379273205\",\n     \"exp\": 1569697004,\n     \"jwtToken\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6NCwibmFtZSI6IkFydW4iLCJlbWFpbCI6InBhbmRleWFydW5vY3RAZ21haWwuY29tIiwibW9iaWxlIjoiNzM3OTI3MzIwNSIsImV4cCI6MTU2OTY5NzAwNH0.4B6r04WGJQ49Ch_YcNOb64R_pC0MelsSugthyvveTMk\"\n }\n }",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 200 ok\n{\n  \"status\": 0,\n   \"message\": \"invalid otp\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/login.php",
    "groupTitle": "Login"
  },
  {
    "type": "post",
    "url": "seller/sign-up",
    "title": "to signup user.",
    "name": "signUp",
    "group": "Login",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "   HTTP/1.1 200 OK\n{\n \"name\":\"Arun\",\n \"gender\":\"male\",\n \"mobile\":\"7379273205\",\n \"email\":\"pandeyarunoct@gmail.com\"\n }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "   HTTP/1.1 200 OK\n{\n \"status\": 1,\n \"message\": \"Your information has been saved successfuly and an otp has been sent to your mobile number\"\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/login.php",
    "groupTitle": "Login"
  },
  {
    "type": "post",
    "url": "seller/save-store",
    "title": "to to save the seller's store.",
    "name": "saveStore",
    "group": "Store",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n {\n\t\"name\":\"Test Store\",\n\t\"postal_code\" : \"TQ5 5BT\",\n\t\"address\": \"17  Guildry Street, GALMPTON\",\n\t\"lat\":19.77187,\n\t\"long\":25.979581\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n{\n  \"status\": 1,\n  \"data\": {\n      \"user_id\": 4,\n      \"name\": \"Test Store\",\n      \"postal_code\": \"TQ5 5BT\",\n      \"address\": \"17  Guildry Street, GALMPTON\",\n      \"lat\": 19.77187,\n      \"long\": 25.979581,\n      \"updated_at\": \"2019-09-26 20:35:31\",\n      \"created_at\": \"2019-09-26 20:35:31\",\n      \"id\": 1\n  }\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "   HTTP/1.1 200 ok\n{\n \"status\": 0,\n \"message\": \"The name has already been taken.\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/store.php",
    "groupTitle": "Store"
  }
] });
