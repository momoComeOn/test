import urllib,urllib2
url = 'http://10.200.21.61:7001/ieas2.1/xsxk/saveXsxk?rwh=2017-2018-1-B1B073040-005&zy=&qz=&token=0.1904938299894724&pageXklb=bx&pageXnxq=2017-20181&pageKkxiaoqu=&pageKkyx=&pageNj=&pageYxdm=&pageZydm=&pageBjdm=&pageKcmc='
header = { 
       # 'Cache-Control':'max-age=0',
       # 'Connection':'keep-alive',
        'Content-Length':'63',
        'Content-Type':'application/x-www-form-urlencoded',
        'Cookie':'JSESSIONID=T5hWZBVL8Pk8bQY3fCmGlN1kvWnTB4TL0MWnGb66GnM3hHH0sVhK!530154643',
        'Referer':'http://10.200.21.61:7001/ieas2.1/xsxk/queryXsxkList',
        'Upgrade-Insecure-Requests':'1',
        'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36' 
        }
data = { 'rwh':'2017-2018-1-B1A09204A-001',
       #'token':'0.9644542161010464',
        'pageXklb':'bx',
        'pageXnxq':'2017-20181'
        }
#data = 'rwh=2017-2018-1-B1B073040-005&zy=&qz=&token=0.1904938299894724&pageXklb=bx&pageXnxq=2017-20181&pageKkxiaoqu=&pageKkyx=&pageNj=&pageYxdm=&pageZydm=&pageBjdm=&pageKcmc='
#data = { 'pageXklb':'bx',
#        'pageXnxq':'2017-20181'
#        }
data = urllib.urlencode(data)
print data
req = urllib2.Request(url=url,data=data,headers=header)

#req.getParameter("pageXklb=bx&pageXnxq=2017-20181&pageNj=&pageYxdm=&pageZydm=")
try:
    response = urllib2.urlopen(req)
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
fl.write(response.read())
fl.close()


