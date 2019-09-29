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
 *       "id": 4,
 *       "name": "Arun",
 *       "email": "pandeyarunoct@gmail.com",
 *       "mobile": "7379273205",
 *       "exp": 1569697004,
 *       "jwtToken": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6NCwibmFtZSI6IkFydW4iLCJlbWFpbCI6InBhbmRleWFydW5vY3RAZ21haWwuY29tIiwibW9iaWxlIjoiNzM3OTI3MzIwNSIsImV4cCI6MTU2OTY5NzAwNH0.4B6r04WGJQ49Ch_YcNOb64R_pC0MelsSugthyvveTMk"
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
 *   "mobile":"7379273205",
 *   "email":"pandeyarunoct@gmail.com"
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *  {
 *   "status": 1,
 *   "message": "Your information has been saved successfuly and an otp has been sent to your mobile number"
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
 *	    "mobile":"7379273205"
 *   }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "message": "Otp has been sent to your mobile number"
 *  }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 200 ok
 *     {
 *       "status": 0,
 *        "message": "Mobile number is not registered"
 *     }
 */