#coding:utf-8
#coding=utf-8
import time
import urllib,urllib2
url =''#填写网址
header = { 
       # 'Cache-Control':'max-age=0',
       # 'Connection':'keep-alive',
       # 'Content-Length':'63',
       # 'Content-Type':'application/x-www-form-urlencoded',
       # 'Cookie':'',
       # 'Referer':'http://10.200.21.61:7001/ieas2.1/xsxk/queryXsxkList',
       # 'Upgrade-Insecure-Requests':'1',
        #'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36' 
        }
#data = { 'rwh':'2017-2018-1-B1A09204A-001',
       #'token':'0.9644542161010464',
        #'pageXklb':'bx',
        #'pageXnxq':'2017-20181'
        #}
data = 'str=2407482&2407482=%D1%A7%CE%BB%BF%CE&2407447=%D1%A7%CE%BB%BF%CE&2407448=%D1%A7%CE%BB%BF%CE&2407449=%D1%A7%CE%BB%BF%CE&2408025=%D1%A7%CE%BB%BF%CE&2407491=%D1%A7%CE%BB%BF%CE'
#data = { 'pageXklb':'bx',
#        'pageXnxq':'2017-20181'
#        }
#data = urllib.urlencode(data)
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

for i in range(1000000):

    url =''#填写网址

    data = ''#填写选课报文
    req = urllib2.Request(url=url,data=data,headers=header)

    #req.getParameter("pageXklb=bx&pageXnxq=2017-20181&pageNj=&pageYxdm=&pageZydm=")
    try:
        response = urllib2.urlopen(req)
    except urllib2.URLError as e:
        if hasattr(e, 'reason'):
            print 'we can not reach a server '
            print 'The reason is %s' %e.reason
            break
        elif hasattr(e, 'code'):
            print 'we can not fulfill the request '
            print 'The error code is %s' %e.code
            break
        else:
            print('No problem')
            break
    #fl = open(str(i)+'.php','w')
    hph = response.read().decode('gb2312').encode('utf-8')
    if i == 1:
        fl = open(str(i)+'.php','w')
        fl.write(hph)
        fl.close()
    print(str(i))
    #time.sleep(0.1)
    if hph.find('课程选课人数已满！')<0:
        print('congratulation~ get class!~~')
        fl = open(str(i)+'.php','w')
        fl.write(hph)
        fl.close()
        break
    print ('no class')




#req.getParameter("pageXklb=bx&pageXnxq=2017-20181&pageNj=&pageYxdm=&pageZydm=")
#try:
#    res = urllib2.urlopen(req)
#except urllib2.URLError as e:
#    if hasattr(e, 'reason'):
#        print 'we can not reach a server '
#        print 'The reason is %s' %e.reason
#    elif hasattr(e, 'code'):
#        print 'we can not fulfill the request '
#        print 'The error code is %s' %e.code
#    else:
#        print('No problem')

#fl = open('9.php','w')
#fl.write(res.read())
#fl.close()

