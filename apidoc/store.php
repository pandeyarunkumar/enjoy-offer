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
 *           "is_active": 1,
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
 *           "is_active": 1,
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
 *           "is_active": 1,
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
/**
 * @api {post}  seller/save-product to save the product.
 * @apiName saveProduct
 * @apiGroup Store
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *  {
 *	"category_id":13,
 *	"store_id" : 9,
 *	"name": "test",
 *  "short_description":"this is a short description",
 *  "description":"dnwhgmdhjk",
 *	"cost_price":12.00,
 *	"selling_price":14.00,
 *	"compare_price":24.00,
 *	"compare_text":"flat 10 rs off",
 *	"is_featured":1,
 *	"is_published":1,
 *  "featured_image_file":"send an image file",
 *  "image_files":"send an array of image files",
 *  "featured_image_id":51,
 *  "image_ids":['52', '53'],
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "message": "Product saved successfuly"
 *   }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *  {
 *   "status": 0,
 *   "message": "Name of the product alredy has been taken"
 *  }
 */
/**
 * @api {get} get-products to get all the products of the particular store.
 * @apiName getProducts
 * @apiGroup Store
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *  {
 *	"store_id" : 9,
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "data": [
 *       {
 *           "id": 1,
 *           "name": "test",
 *           "slug": "test",
 *           "short_description": "this is a short description",
 *           "description": "dnwhgmdhjk",
 *           "cost_price": 12,
 *           "selling_price": 14,
 *           "compare_price": 24,
 *           "compare_text": "flat 10 rs off",
 *           "is_featured": 1,
 *           "featured_image": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 16:30:25-5d9a16a10666d.png",
 *           "is_published": 1,
 *           "published_at": "2019-10-06 16:30:25",
 *           "created_at": "2019-10-06 16:30:25",
 *           "updated_at": "2019-10-06 16:30:25",
 *           "category": {
 *               "id": 13,
 *               "slug": "car-sale",
 *               "name": "Car Sale",
 *               "icon": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-05 08:27:34-5d9853f65e4fc.png",
 *               "image": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-05 08:27:34-5d9853f6c9f61.png",
 *               "created_at": "2019-10-05 08:27:34",
 *               "updated_at": "2019-10-05 08:27:34"
 *           },
 *           "images": [
 *               {
 *                   "id": 69,
 *                   "url": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 16:30:25-5d9a16a1356b3.png"
 *               },
 *               {
 *                   "id": 70,
 *                   "url": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 16:30:25-5d9a16a141559.png"
 *               },
 *               {
 *                   "id": 52,
 *                   "url": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 12:50:01-5d99e2f913cee.png"
 *               },
 *               {
 *                   "id": 53,
 *                   "url": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 12:50:55-5d99e32f3c60c.jpeg"
 *               }
 *           ]
 *       },
 *       {
 *           "id": 2,
 *           "name": "test2",
 *           "slug": "test2",
 *           "short_description": "this is a short description",
 *           "description": "dnwhgmdhjk",
 *           "cost_price": 12,
 *           "selling_price": 14,
 *           "compare_price": 24,
 *           "compare_text": "flat 10 rs off",
 *           "is_featured": 1,
 *           "featured_image": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 16:42:37-5d9a197db3ba3.png",
 *           "is_published": 1,
 *           "published_at": "2019-10-06 16:42:37",
 *           "created_at": "2019-10-06 16:42:37",
 *           "updated_at": "2019-10-06 16:42:37",
 *           "category": {
 *               "id": 13,
 *               "slug": "car-sale",
 *               "name": "Car Sale",
 *               "icon": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-05 08:27:34-5d9853f65e4fc.png",
 *               "image": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-05 08:27:34-5d9853f6c9f61.png",
 *               "created_at": "2019-10-05 08:27:34",
 *               "updated_at": "2019-10-05 08:27:34"
 *           },
 *           "images": [
 *               {
 *                   "id": 72,
 *                   "url": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 16:42:37-5d9a197dd7ee1.png"
 *               },
 *               {
 *                   "id": 73,
 *                   "url": "http://localhost:8000/storage/images/enjoy-offer-image-2019-10-06 16:42:37-5d9a197df256c.png"
 *               }
 *           ]
 *       }
 *   ]
 * }
 */