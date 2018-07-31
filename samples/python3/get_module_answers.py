import requests

headers = {
    'BQAPPTOK': '{BQAPPTOK}',
    'BQMODTOK': '{BQMODTOK}',
}
payload = {
    'initialDate': '2018-01-01',
    'limit': '10',
    'users': 'ivan@beepquest.com,fernando@hellodave.mx',
}
r = requests.get('{url_api}/v1/question-module-answers'.format(
    url_api='http://api.beepquest.com'
), headers=headers, params=payload)

print(r.json())
