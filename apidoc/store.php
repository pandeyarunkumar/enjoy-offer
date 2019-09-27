/**
 * @api {post}  seller/save-store to to save the seller's store.
 * @apiName saveStore
 * @apiGroup Store
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *  {
 *	"name":"Test Store",
 *	"postal_code" : "TQ5 5BT",
 *	"address": "17  Guildry Street, GALMPTON",
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
 *       "updated_at": "2019-09-26 20:35:31",
 *       "created_at": "2019-09-26 20:35:31",
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