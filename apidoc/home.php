/**
 * @api {get}  get-banners to get banners
 * @apiName getBanners
 * @apiGroup Home
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *  {
 *   "status": 1,
 *   "data": [
 *       {
 *           "id": 1,
 *           "image": "http://54.218.78.66/enjoy-offer/public/storage/images/enjoy-offer-image2019-11-03 16:44:005dbf03d0ddd46.png"
 *       },
 *       {
 *           "id": 2,
 *           "image": "http://54.218.78.66/enjoy-offer/public/storage/images/enjoy-offer-image2019-11-03 16:44:005dbf03d0df9ce.png"
 *       },
 *       {
 *           "id": 3,
 *           "image": "http://54.218.78.66/enjoy-offer/public/storage/images/enjoy-offer-image2019-11-03 16:44:005dbf03d0e23e2.png"
 *       }
 *   ]
 *   }
 */
/**
 * @api {post}  raise-your-query raise your query.
 * @apiName raiseYourQuery
 * @apiGroup Home
 *
 * @apiSuccessExample Request:
 *     HTTP/1.1 200 OK
 *	{
 *	"name":"Arun Kumar Pandey",
 *	"mobile":"7379273205",
 *	"email":"pandeyarunoct@gmail.com",
 *	"query_msg":"Please ignore, just for testing"
 *  }
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 * {
 *   "status": 1,
 *   "message": "We have recorded your query"
 *  }
 */
/**
 * @api {get}  get-faqs to get FAQ
 * @apiName getFaqs
 * @apiGroup Home
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *      "status": 1,
 *   "data": [
 *       {
 *           "id": 1,
 *           "question": "Lorem Ipsum is simply dummy text of the printing and typesetting industry?",
 *           "answer": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
 *       },
 *       {
 *           "id": 2,
 *           "question": "Lorem Ipsum is simply dummy text of the printing and typesetting industry?",
 *           "answer": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
 *       },
 *       {
 *           "id": 3,
 *           "question": "Lorem Ipsum is simply dummy text of the printing and typesetting industry?",
 *           "answer": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
 *       },
 *       {
 *           "id": 4,
 *           "question": "Lorem Ipsum is simply dummy text of the printing and typesetting industry?",
 *           "answer": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
 *       }
 *   ]
 *}
 */