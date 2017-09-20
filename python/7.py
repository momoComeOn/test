import urllib,urllib2
import cookielib
import json
url = 'https://sso.buaa.edu.cn/login'
header = { 
       # 'Cache-Control':'max-age=0',
       # 'Connection':'keep-alive',
       # 'Content-Length':'63',
       # 'Content-Type':'application/x-www-form-urlencoded',
       # 'Cookie':'JSESSIONID=T5hWZBVL8Pk8bQY3fCmGlN1kvWnTB4TL0MWnGb66GnM3hHH0sVhK!530154643',
       # 'Referer':'http://10.200.21.61:7001/ieas2.1/xsxk/queryXsxkList',
       # 'Upgrade-Insecure-Requests':'1',
        'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36' 
        }
data = { #'rwh':'2017-2018-1-B1A09204A-001',
       #'token':'0.9644542161010464',
       # 'pageXklb':'bx',
      #  'pageXnxq':'2017-20181'
      #  
        'username':'',
        'password':''
        }
#data = 'username=13151165&password=907616&code=&lt=LT-154738-HthdRo0q5VSzlOO1xOTXKyqXQFVNJW&execution=e1s1&_eventId=submit&submit=%E7%99%BB%E5%BD%95'
#data = { 'pageXklb':'bx',
#        'pageXnxq':'2017-20181'
#        }
data = urllib.urlencode(data)
#print data

cookiejar = cookielib.CookieJar()
opener = urllib2.build_opener(urllib2.HTTPCookieProcessor(cookiejar))

req = urllib2.Request(url=url,data=data,headers=header)


#req.getParameter("pageXklb=bx&pageXnxq=2017-20181&pageNj=&pageYxdm=&pageZydm=")
try:
    res = urllib2.urlopen(req)
    #res = opener.open(req)
except urllib2.URLError as e:
    if hasattr(e, 'reason'):
        print 'we can not reach a server '
        print 'The reason is %s' %e.reason
    elif hasattr(e, 'code'):
        print 'we can not fulfill the request '
        print 'The error code is %s' %e.code
    else:
        print('No problem')
#response = urllib2.urlopen(req)
#get_url = response.headers['location']
#r = urllib2.urlopen(get_url,headers=header)

fl = open('7.php','w')
fl.write(res.read())
fl.close()

re = json.loads(res.read())
print re

