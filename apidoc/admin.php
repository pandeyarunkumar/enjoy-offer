/**
 * @api {post}  admin/sign-in to sign in the super admin.
 * @apiGroup superAdmin
 * @apiName signIn
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *  {
 *	 "email":"superadmin@enjoyoffer.com",
 *	 "password":"123456789"
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *  "status": 1,
 *   "data": {
 *       "id": 1,
 *       "name": "Super Admin",
 *       "email": "superadmin@enjoyoffer.com",
 *       "mobile": "1234567891",
 *       "exp": 1569840998,
 *       "jwtToken": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6NSwibmFtZSI6IlN1cGVyIEFkbWluIiwiZW1haWwiOiJzdXBlcmFkbWluQGVuam95b2ZmZXIuY29tIiwibW9iaWxlIjoiMTIzNDU2Nzg5MSIsImV4cCI6MTU2OTg0MDk5OH0.DtVFKBJm_Pt0tx_SS3aPFq5VS8lFyjPLMc-kWyg5GfA"
 *   }
 *  }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *  {
 *   "status": 0,
 *   "message": "invalid credentials"
 *   }
 */
/**
 * @api {post}  save-category to save category or subcategory.
 * @apiGroup superAdmin
 * @apiName saveCategory
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 * {
 *   	 "name":"Car Sale",
 *       "icon":"upload a image file(like jpg, png etc)",
 *       "image":"upload a image file(like jpg, png etc)",
 *   }
 *
 *   @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *   {
 *	    "name":"Car Sale",
 *      "icon":"upload a image file(like jpg, png etc)",
 *      "image":"upload a image file(like jpg, png etc)",
 *      "parent_category_id":1
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "message": "Category saved successfuly"
 *   }
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *  {
 *   "status": 0,
 *   "message": "The name has already been taken"
 *   }
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *  {
 *   "status": 0,
 *   "message": "Gievn parent category not found"
 *   }
 */