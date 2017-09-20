import urllib2
url = 'https://www.douban.com/accounts/login'
response = urllib2.urlopen(url)
content = urllib2.urlopen(url).read()
fi = open('begin.php','w')
fi.write(content)
fi.close()
