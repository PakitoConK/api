const axios = require('axios');

axios({
  method: 'get',
  baseURL: 'http://api.beepquest.com/',
  url: '/v1/question-module-answers',
  headers: {
    'BQAPPTOK': '{APP_TOKEN}',
    'BQMODTOK': '{MODULE_TOKEN}',
  },
  params: {
    'initialDate': '2018-01-01',
    'limit': '10',
    'users': '.com,,,,ivan@beepquest.com',
  }
}).then((response) => {
  console.log(response.data);
})