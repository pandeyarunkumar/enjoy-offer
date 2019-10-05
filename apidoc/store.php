/**
 * @api {post}  seller/save-store to save the seller's store.
 * @apiName saveStore
 * @apiGroup Store
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *  {
 *	"name":"Test Store",
 *	"postal_code" : "TQ5 5BT",
 *	"address": "17  Guildry Street, GALMPTON",
 *  "logo":"Send an image file(like jpg, png etc)",
 *  "cover_image":"Send an image file(like jpg, png etc)",
 *	"lat":19.77187,
 *	"long":25.979581
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "data": {
 *       "user_id": 4,
 *       "name": "Test Store",
 *       "postal_code": "TQ5 5BT",
 *       "address": "17  Guildry Street, GALMPTON",
 *       "lat": 19.77187,
 *       "long": 25.979581,
 *       "logo": "null",
 *       "cover_image": "null",
 *       "id": 1
 *   }
 * }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *  {
 *   "status": 0,
 *   "message": "The name has already been taken."
 *  }
 */
/**
 * @api {get}  get-categories to get all categories.
 * @apiName getCategories
 * @apiGroup Store
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *    {
 *   "status": 1,
 *   "data": [
 *       {
 *           "id": 1,
 *           "slug": "groceries",
 *           "name": "Groceries",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:42:44",
 *           "updated_at": "2019-10-02 18:42:44"
 *       },
 *       {
 *           "id": 2,
 *           "slug": "pizza-burger",
 *           "name": "Pizza & Burger",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:43:04",
 *           "updated_at": "2019-10-02 18:43:04"
 *       },
 *       {
 *           "id": 3,
 *           "slug": "clothes",
 *           "name": "Clothes",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:43:36",
 *           "updated_at": "2019-10-02 18:43:36"
 *       },
 *       {
 *           "id": 4,
 *           "slug": "electronics",
 *           "name": "Electronics",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:43:52",
 *           "updated_at": "2019-10-02 18:43:52"
 *       },
 *       {
 *           "id": 5,
 *           "slug": "travel",
 *           "name": "Travel",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:44:06",
 *           "updated_at": "2019-10-02 18:44:06"
 *       },
 *       {
 *           "id": 6,
 *           "slug": "furniture",
 *           "name": "Furniture",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:44:21",
 *           "updated_at": "2019-10-02 18:44:21"
 *       },
 *       {
 *           "id": 7,
 *           "slug": "health-center-gym-nutrifoods",
 *           "name": "Health Center (Gym & nutrifoods)",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:45:18",
 *           "updated_at": "2019-10-02 18:45:18"
 *       },
 *       {
 *           "id": 8,
 *           "slug": "footware",
 *           "name": "Footware",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:45:30",
 *           "updated_at": "2019-10-02 18:45:30"
 *       },
 *       {
 *           "id": 9,
 *           "slug": "beauty-products",
 *           "name": "Beauty Products",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:45:47",
 *           "updated_at": "2019-10-02 18:45:47"
 *       },
 *       {
 *           "id": 10,
 *           "slug": "artificial-jewellery",
 *           "name": "Artificial jewellery",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:46:19",
 *           "updated_at": "2019-10-02 18:46:19"
 *       },
 *       {
 *           "id": 11,
 *           "slug": "car-sale",
 *           "name": "Car Sale",
 *           "icon": null,
 *           "image": null,
 *           "created_at": "2019-10-02 18:46:29",
 *           "updated_at": "2019-10-02 18:46:29"
 *       }
 *   ]
 *}
 *
 */
/**
 * @api {get}  get-stores to get all stores.
 * @apiName getStores
 * @apiGroup Store
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *   {
 *  "status": 1,
 *  "data": [
 *      {
 *           "id": 1,
 *           "name": "Test Store",
 *           "postal_code": "TQ5 5BT",
 *           "logo": null,
 *           "cover_image": null,
 *           "address": "17  Guildry Street, GALMPTON",
 *           "lat": 19.77187,
 *           "long": 25.979581,
 *           "seller": {
 *               "id": 4,
 *               "name": "Arun",
 *               "email": "pandeyarunoct@gmail.com",
 *               "mobile": "7379273205"
 *           }
 *       },
 *       {
 *           "id": 2,
 *           "name": "Test Store2",
 *           "postal_code": "TQ5 5BT",
 *           "logo": null,
 *           "cover_image": null,
 *           "address": "17  Guildry Street, GALMPTON",
 *           "lat": 19.77187,
 *           "long": 25.979581,
 *           "seller": {
 *               "id": 4,
 *               "name": "Arun",
 *               "email": "pandeyarunoct@gmail.com",
 *               "mobile": "7379273205"
 *           }
 *       },
 *       {
 *           "id": 3,
 *           "name": "Test Store3",
 *           "postal_code": "TQ5 5BT",
 *           "logo": null,
 *           "cover_image": null,
 *           "address": "17  Guildry Street, GALMPTON",
 *           "lat": 19.77187,
 *           "long": 25.979581,
 *           "seller": {
 *               "id": 4,
 *               "name": "Arun",
 *               "email": "pandeyarunoct@gmail.com",
 *               "mobile": "7379273205"
 *           }
 *       }
 *   ]
 *   }
 */