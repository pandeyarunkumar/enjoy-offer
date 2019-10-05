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
          "content": "   HTTP/1.1 200 OK\n{\n \"name\":\"Arun\",\n \"mobile\":\"7379273205\",\n \"email\":\"pandeyarunoct@gmail.com\"\n }",
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
    "type": "get",
    "url": "get-categories",
    "title": "to get all categories.",
    "name": "getCategories",
    "group": "Store",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n   {\n  \"status\": 1,\n  \"data\": [\n      {\n          \"id\": 1,\n          \"slug\": \"groceries\",\n          \"name\": \"Groceries\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:42:44\",\n          \"updated_at\": \"2019-10-02 18:42:44\"\n      },\n      {\n          \"id\": 2,\n          \"slug\": \"pizza-burger\",\n          \"name\": \"Pizza & Burger\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:43:04\",\n          \"updated_at\": \"2019-10-02 18:43:04\"\n      },\n      {\n          \"id\": 3,\n          \"slug\": \"clothes\",\n          \"name\": \"Clothes\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:43:36\",\n          \"updated_at\": \"2019-10-02 18:43:36\"\n      },\n      {\n          \"id\": 4,\n          \"slug\": \"electronics\",\n          \"name\": \"Electronics\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:43:52\",\n          \"updated_at\": \"2019-10-02 18:43:52\"\n      },\n      {\n          \"id\": 5,\n          \"slug\": \"travel\",\n          \"name\": \"Travel\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:44:06\",\n          \"updated_at\": \"2019-10-02 18:44:06\"\n      },\n      {\n          \"id\": 6,\n          \"slug\": \"furniture\",\n          \"name\": \"Furniture\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:44:21\",\n          \"updated_at\": \"2019-10-02 18:44:21\"\n      },\n      {\n          \"id\": 7,\n          \"slug\": \"health-center-gym-nutrifoods\",\n          \"name\": \"Health Center (Gym & nutrifoods)\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:45:18\",\n          \"updated_at\": \"2019-10-02 18:45:18\"\n      },\n      {\n          \"id\": 8,\n          \"slug\": \"footware\",\n          \"name\": \"Footware\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:45:30\",\n          \"updated_at\": \"2019-10-02 18:45:30\"\n      },\n      {\n          \"id\": 9,\n          \"slug\": \"beauty-products\",\n          \"name\": \"Beauty Products\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:45:47\",\n          \"updated_at\": \"2019-10-02 18:45:47\"\n      },\n      {\n          \"id\": 10,\n          \"slug\": \"artificial-jewellery\",\n          \"name\": \"Artificial jewellery\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:46:19\",\n          \"updated_at\": \"2019-10-02 18:46:19\"\n      },\n      {\n          \"id\": 11,\n          \"slug\": \"car-sale\",\n          \"name\": \"Car Sale\",\n          \"icon\": null,\n          \"image\": null,\n          \"created_at\": \"2019-10-02 18:46:29\",\n          \"updated_at\": \"2019-10-02 18:46:29\"\n      }\n  ]\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/store.php",
    "groupTitle": "Store"
  },
  {
    "type": "get",
    "url": "get-stores",
    "title": "to get all stores.",
    "name": "getStores",
    "group": "Store",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "   HTTP/1.1 200 OK\n {\n\"status\": 1,\n\"data\": [\n    {\n         \"id\": 1,\n         \"name\": \"Test Store\",\n         \"postal_code\": \"TQ5 5BT\",\n         \"logo\": null,\n         \"cover_image\": null,\n         \"address\": \"17  Guildry Street, GALMPTON\",\n         \"lat\": 19.77187,\n         \"long\": 25.979581,\n         \"seller\": {\n             \"id\": 4,\n             \"name\": \"Arun\",\n             \"email\": \"pandeyarunoct@gmail.com\",\n             \"mobile\": \"7379273205\"\n         }\n     },\n     {\n         \"id\": 2,\n         \"name\": \"Test Store2\",\n         \"postal_code\": \"TQ5 5BT\",\n         \"logo\": null,\n         \"cover_image\": null,\n         \"address\": \"17  Guildry Street, GALMPTON\",\n         \"lat\": 19.77187,\n         \"long\": 25.979581,\n         \"seller\": {\n             \"id\": 4,\n             \"name\": \"Arun\",\n             \"email\": \"pandeyarunoct@gmail.com\",\n             \"mobile\": \"7379273205\"\n         }\n     },\n     {\n         \"id\": 3,\n         \"name\": \"Test Store3\",\n         \"postal_code\": \"TQ5 5BT\",\n         \"logo\": null,\n         \"cover_image\": null,\n         \"address\": \"17  Guildry Street, GALMPTON\",\n         \"lat\": 19.77187,\n         \"long\": 25.979581,\n         \"seller\": {\n             \"id\": 4,\n             \"name\": \"Arun\",\n             \"email\": \"pandeyarunoct@gmail.com\",\n             \"mobile\": \"7379273205\"\n         }\n     }\n ]\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/store.php",
    "groupTitle": "Store"
  },
  {
    "type": "post",
    "url": "seller/save-store",
    "title": "to save the seller's store.",
    "name": "saveStore",
    "group": "Store",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n {\n\t\"name\":\"Test Store\",\n\t\"postal_code\" : \"TQ5 5BT\",\n\t\"address\": \"17  Guildry Street, GALMPTON\",\n \"logo\":\"Send an image file(like jpg, png etc)\",\n \"cover_image\":\"Send an image file(like jpg, png etc)\",\n\t\"lat\":19.77187,\n\t\"long\":25.979581\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n{\n  \"status\": 1,\n  \"data\": {\n      \"user_id\": 4,\n      \"name\": \"Test Store\",\n      \"postal_code\": \"TQ5 5BT\",\n      \"address\": \"17  Guildry Street, GALMPTON\",\n      \"lat\": 19.77187,\n      \"long\": 25.979581,\n      \"logo\": \"null\",\n      \"cover_image\": \"null\",\n      \"id\": 1\n  }\n}",
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
  },
  {
    "type": "post",
    "url": "save-category",
    "title": "to save category or subcategory.",
    "group": "superAdmin",
    "name": "saveCategory",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n{\n  \t \"name\":\"Car Sale\",\n      \"icon\":\"Send an image file(like jpg, png etc)\",\n      \"image\":\"Send an image file(like jpg, png etc)\",\n  }",
          "type": "json"
        },
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n  {\n\t    \"name\":\"Car Sale\",\n     \"icon\":\"upload a image file(like jpg, png etc)\",\n     \"image\":\"upload a image file(like jpg, png etc)\",\n     \"parent_category_id\":1\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n{\n  \"status\": 1,\n  \"message\": \"Category saved successfuly\"\n  }",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "   HTTP/1.1 200 ok\n{\n \"status\": 0,\n \"message\": \"The name has already been taken\"\n }",
          "type": "json"
        },
        {
          "title": "Error-Response:",
          "content": "   HTTP/1.1 200 ok\n{\n \"status\": 0,\n \"message\": \"Gievn parent category not found\"\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/admin.php",
    "groupTitle": "superAdmin"
  },
  {
    "type": "post",
    "url": "admin/sign-in",
    "title": "to sign in the super admin.",
    "group": "superAdmin",
    "name": "signIn",
    "success": {
      "examples": [
        {
          "title": "Request:",
          "content": "    HTTP/1.1 200 OK\n {\n\t \"email\":\"superadmin@enjoyoffer.com\",\n\t \"password\":\"123456789\"\n  }",
          "type": "json"
        },
        {
          "title": "Success-Response:",
          "content": "    HTTP/1.1 200 OK\n{\n \"status\": 1,\n  \"data\": {\n      \"id\": 1,\n      \"name\": \"Super Admin\",\n      \"email\": \"superadmin@enjoyoffer.com\",\n      \"mobile\": \"1234567891\",\n      \"exp\": 1569840998,\n      \"jwtToken\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6NSwibmFtZSI6IlN1cGVyIEFkbWluIiwiZW1haWwiOiJzdXBlcmFkbWluQGVuam95b2ZmZXIuY29tIiwibW9iaWxlIjoiMTIzNDU2Nzg5MSIsImV4cCI6MTU2OTg0MDk5OH0.DtVFKBJm_Pt0tx_SS3aPFq5VS8lFyjPLMc-kWyg5GfA\"\n  }\n }",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "   HTTP/1.1 200 ok\n{\n \"status\": 0,\n \"message\": \"invalid credentials\"\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/admin.php",
    "groupTitle": "superAdmin"
  }
] });
