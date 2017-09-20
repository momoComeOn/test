#!/usr/bin/env python
# -*- coding: utf-8 -*-
"""
__title__ = ''
__author__ = 'pi'
__mtime__ = '8/23/2015-023'
__email__ = 'pipisorry@126.com'
# code is far away from bugs with the god animal protecting
    I love animals. They taste delicious.
              ┏┓    ┏┓
            ┏┛┻━━━┛┻   \
            ┃      ☃   ┃
            ┃  ┳┛  ┗┳  ┃
            ┃      ┻   ┃
            ┗━┓      ┏━┛
                ┃      ┗━━━┓
                ┃  神兽保佑 ┣┓
                ┃　永无BUG！┏┛
                ┗┓┓┏━┳┓┏┛
                  ┃┫┫  ┃┫┫
                  ┗┻┛  ┗┻┛
"""
import urllib,urllib2
import cookielib

LOGIN_URL = 'https://www.douban.com/accounts/login'
get_url = 'http://www.douban.com/'  # 利用cookie请求访问另一个网址

values = {'form_email': '','form_password':''}
postdata = urllib.urlencode(values)
user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36'
headers = {'User-Agent': user_agent}

cookie_filename = 'cookie_jar.txt'
#cookie_jar = http.cookiejar.MozillaCookieJar(cookie_filename)
#handler = urllib.request.HTTPCookieProcessor(cookie_jar)
#opener = urllib.request.build_opener(handler)
cookie_support = urllib2.HTTPCookieProcessor(cookielib.CookieJar())
opener = urllib2.build_opener(cookie_support,urllib2.HTTPHandler)
request = urllib2.Request(LOGIN_URL, postdata, headers)


url='https://www.douban.com/people/149670914/'
data = {'ck':'tHpA','bp_text':'ha?','bp_submit':'留言'}
data = urllib.urlencode(data)
get_request = urllib2.Request(url,data,headers)
get_response = opener.open(get_request)
#try:
#    response = opener.open(request)
#    # print(response.read().decode())
#except urllib.error.URLError as e:
#    print(e.code, ':', e.reason)
#
#cookie_jar.save(ignore_discard=True, ignore_expires=True)  # 保存cookie到cookie.txt中
#for item in cookie_jar:
#    print('Name = ' + item.name)
#    print('Value = ' + item.value)
#
#get_request = urllib.request.Request(get_url, headers=headers)
#get_response = opener.open(get_request)
#print('个人主页' in get_response.read().decode())
