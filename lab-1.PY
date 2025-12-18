'''#1. display current time and date
import datetime
date = datetime.datetime.now()
print ("current date and time:",date)

# 2.user first anme and last name and reverse
name1=input("enter firdt name")
name2=input("enter alst name")
print(name1[::-1],name2[::-1])

#3. n+nn+nnn
n=int(input("enter number"))
output=n+(n*n)+(n*n*n)
print("output is ",output)

# 4.take 3 numbers and sum it
n1=int(input("enter number1"))
n2=int(input("enter number2"))
n3=int(input("enter number3"))
if(n1==n2==n3):
    print("given numbers are all equal output is",(3(3*n1)))
else:
    print("give numbers are different so output is",(n1+n2+n3))

# 5.(x+y)*(x+y)
x=int(input("enter number 1"))
y=int(input("enter number 2"))
print(f"expected output is({x}+{y}^2)=",((x+y)*(x+y)))

# 6.future compound
amount=int(input("enter number amount"))
rate=float(input("enter number rate"))
year=float(input("enter number year"))
n=int(input("no.of times the intrest at compounded"))
future=amount*((1+(rate/100))**(year*n))
print("future value is=",round(future,2))

#7. parse string to int,float
x=input("enter number")
print("int", int(x))
print("float", float(x))

#8 sum of first positive integers
x=int(input("enter number 1"))
sum=0
for i in range(x+1):
    sum=sum+i
print("output is",sum)

# 9.sum of digits of a number
x=int(input("enter number"))
sum=0
while(x!=0):
    num=x%10
    sum=sum+int(num)
    x=x/10
print("sum of digits is",sum)

# 10. ascii value of a character
ch= input("enter a character")
print("ascii value", ord(ch))

#11.number is string is numeric
s=input("enter number")
if s.isnumeric():
    print("given is number")
else:
    print("it is  string")
    
# 12.rectangular number
x=int(input("enter number row"))
y=int(input("enter number col"))
for i in range(x):
    for j in range(y):
        print("*",end='')
    print() 

# 13.7 divisible and not multiple of 5
x=int(input("enter initial range"))
y=int(input("enter final range"))
if(x<y):
    for i in range(x,y+1):
        if (i%7==0 and i%5!=0):
            print(i)
    

#15. right angular alphabet triangle
x=int(input("enter number"))
for i in range(x,0,-1):
    for j in range(i):
        print(chr(j+65),end='')
            
    print() 

# 14.formula based
import math
C=50
H=30
val=input("enter number").split(",")
result=[]
for d in val:
    q=math.sqrt((2*C*int(d))/H)
    result.append(str(round(q)))
print(",".join(result))'''












