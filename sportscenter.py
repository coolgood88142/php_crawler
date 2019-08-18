import requests
import bs4
from bs4 import BeautifulSoup

#取得表頭的function
def getHeaders(raw_head):
    headers={}
    for raw in raw_head.split('\n'):
        headerKey,headerValue = raw.split(':',1)
        headers[headerKey] = headerValue
    return headers

login_headers = 
'''Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3
Accept-Encoding: gzip, deflate, br
Accept-Language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7
Connection: keep-alive
Host: scr.cyc.org.tw
Referer: https://scr.cyc.org.tw/tp10.aspx?module=login_page&files=login
Sec-Fetch-Mode: navigate
Sec-Fetch-Site: same-origin
Sec-Fetch-User: ?1
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'''

headers=getHeaders(login_headers)

url='https://scr.cyc.org.tw/tp10.aspx';

account=''
password=''
formtable={
    'ContentPlaceHolder1_loginid':'',
    'loginpw':'',
    '__VIEWSTATE':''
}

formtable['ContentPlaceHolder1_loginid'] = account
formtable['loginpw'] = password






