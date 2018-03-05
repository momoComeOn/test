#coding:utf-8
#coding=utf-8
#author：momoComeOn
import time
import urllib,urllib2
def getclass(url,header,data):
	for i in range(1000):  #循环次数
		req = urllib2.Request(url=url,data=data,headers=header)

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
		hph = response.read().decode('gb2312').encode('utf-8')
		print(str(i))
		#time.sleep(0.1)  #设置间隔时间
		if hph.find('课程选课人数已满！')<0:
			print('congratulation~ get class!~~')
			#显示抢课成功但没抢上课 可能是时间过长cookie失效引起的   可以打印结果看看是否是登出引起
			#fl = open(str(i)+'.php','w')   
			#fl.write(hph)
			#fl.close()
			break
		print ('no class')


url ='http://gsmis.graduate.buaa.edu.cn/gsmis/py/pyXuanBiXiuKe.do'#填写网址
#在选课界面选好课(先别提交) 按F12 点提交
#查看pyXuanBiXiuKe.do的报文
#抄写请求报文头  最重要的是cookie（自己的身份） 其他随意
#抄写数据报文内容 data
header = { 
        'Cache-Control':'max-age=0',
        'Connection':'keep-alive',
        'Cookie':'********', #填写自己的cookie
        'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36' 
        }
data = '2407443=%D1%*****'  #填写需要选课的课程报文 Form Data  view source格式
getclass(url,header,data)