import urllib,urllib2,requests
url_login ='https://www.douban.com/accounts/login'
cookies = {}
requests_session = requests.session() 
response_captcha = requests_session.get(url=url_login, cookies=cookies)
response1 = requests.get(url_login) 
response2 = requests_session.get(url_login) 
#response3 = requests_session.get(url_results)
file_s = open('5.php','w')
file_s.write(response2.content)
file_s.close()
