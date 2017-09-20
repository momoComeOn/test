import urllib,urllib2
url = "http://www.douban.com/"
data = {'form_email':'364905496@qq.com','form_password':''}
data = urllib.urlencode(data)
print url
headers = {'User_Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36'}
req = urllib2.Request(url=url, data=data)
response = urllib2.urlopen(req)
fl=open('1.php','w')
fl.write(response.read())
fl.close()
