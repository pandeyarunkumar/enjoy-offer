/**
 * @api {post}  seller/sign-in to login user.
 * @apiName signIn
 * @apiGroup Login
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *	{
 *       "otp":"1234",
 *       "mobile":"7379273205"
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *  {
 *   "status": 1,
 *   "data": {
 *       "id": 1,
 *       "name": "Arun",
 *       "exp": 1541153780,
 *       "jwtToken": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MSwibmFtZSI6IkFydW4iLCJnZW5kZXIiOiJtYWxlIiwiZXhwIjoxNTQxMTUzNzgwfQ.VggypMT4US2mBNUVIe0GEYWZPlV6DGxiUTlnCUOAZjI"
 *   }
 *   }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *     {
 *       "status": 0,
 *        "message": "invalid otp"
 *     }
 */

 /**
 * @api {post}  seller/sign-up to signup user.
 * @apiName signUp
 * @apiGroup Login
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *  {
 *   "name":"Arun",
 *   "gender":"male",
 *   "mobile":"7379273205",
 *   "email":"pandeyarunoct@gmail.com"
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *  {
 *   "status": 1,
 *   "data": {
 *       "name": "Arun",
 *       "mobile": "7379273205",
 *       "email": "pandeyarunoct@gmail.com",
 *       "id": 1
 *   }
 *   }
 */
 /**
 * @api {post}  seller/generate-otp to generate otp.
 * @apiName generateOtp
 * @apiGroup Login
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *
 *   {
 *	    "mobile":"7905421650"
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "data": {
 *       "id": 1,
 *       "name": "Arun",
 *       "email": "pandeyarunoct@gmail.com",
 *       "mobile": "7379273205"
 *   }
 *   }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *     {
 *       "status": 0,
 *        "message": "Mobile number is not registered"
 *     }
 */