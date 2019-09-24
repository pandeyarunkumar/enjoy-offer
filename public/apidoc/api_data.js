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
          "content": "    HTTP/1.1 200 OK\n\n  {\n\t    \"mobile\":\"7905421650\"\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n{\n  \"status\": 1,\n  \"data\": {\n      \"id\": 1,\n      \"name\": \"Arun\",\n      \"email\": \"pandeyarunoct@gmail.com\",\n      \"mobile\": \"7379273205\"\n  }\n  }",
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
          "content": "   HTTP/1.1 200 OK\n{\n \"status\": 1,\n \"data\": {\n     \"id\": 1,\n     \"name\": \"Arun\",\n     \"exp\": 1541153780,\n     \"jwtToken\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MSwibmFtZSI6IkFydW4iLCJnZW5kZXIiOiJtYWxlIiwiZXhwIjoxNTQxMTUzNzgwfQ.VggypMT4US2mBNUVIe0GEYWZPlV6DGxiUTlnCUOAZjI\"\n }\n }",
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
          "content": "   HTTP/1.1 200 OK\n{\n \"status\": 1,\n \"data\": {\n     \"name\": \"Arun\",\n     \"mobile\": \"7379273205\",\n     \"email\": \"pandeyarunoct@gmail.com\",\n     \"id\": 1\n }\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/login.php",
    "groupTitle": "Login"
  }
] });
