import urllib,urllib2
url = "http://www.baidu.com/s"
data = {'wd':'ninggedexiaozhan'}
data = urllib.urlencode(data)
full_url = url + '?' + data
print full_url
response = urllib2.urlopen(full_url)
print response.read()
