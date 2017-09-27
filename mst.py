#coding=utf-8
import numpy as np
from numpy import random
class mst:
    NUM = 0 #点的数量
    cd = 0 #记录离网络最近的点
    w = 0  # 点间距离
    label = 'unchoose' #记录点的状态
    sec_cd = 0 #记录未连入网络的点与网络得最近距离
    last = 0  #记录上一个刚连入网络的点
    point = 0 #记录下一个连入网络的点
    near = 0  #记录sec_cd的前一个链接点
    def __init__(self,num):   #初始化
        self.NUM=num
        self.w=random.random(size=(num,num))
        for i in range(num):
            for j in range(i+1):
                if i == j:
                    self.w[j,i]=0
                else:
                    self.w[j,i]=self.w[i,j]
        self.label = ['unchoose']*num
        self.sec_cd =[1]*num
        self.choose(0)
        self.last =0
        self.near =[0]*num
    def mst(self):  #算法
        for i in range(self.NUM-1):
            self.distence()

    def distence(self): #找到离已生长树的最近点
        self.cd = 1
        for i in range(self.NUM):
            if self.label[i]=='choose':
                continue
            #elif i == self.last:
             #   continue 
            else:
                if self.w[i,self.last] < self.sec_cd[i]:
                    self.sec_cd[i]=self.w[i,self.last]
                    self.near[i]=self.last
                if self.cd > self.w[i,self.last]:
                    self.cd = self.w[i,self.last]
                    self.point = i
        self.mark()
    
    def mark(self): #找到的最短距离与之前保存的最短距离进行比较
        for i in range(self.NUM):
            if self.label[i]=='choose':
                continue
            #elif i == self.last:
            #    continue
            else:
                if self.cd > self.sec_cd[i]:
                    self.cd = self.sec_cd[i]
                    self.point = i
                    self.last = self.near[i]
        self.choose(self.point)
        print (self.last,self.point)
        self.last = self.point


    def choose(self,num):  #标记包含点
        self.label[num] = 'choose'

def main():
    A=mst(6)
    print A.w
    A.mst()

    

if __name__ == '__main__':
    main()

