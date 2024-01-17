# Devlop python program for histgram chart to represent data.
import matplotlib.pyplot as plt
# frequency 
# ages=[2,5,70,40,30,45,50,45,43,40,44,60,7,13,57,18,90,77,32,21,20,40]
ages=[2,5,70,40,30,45,50,45,43,40,44,60,7,13,57,18,90,77,32,21,20,40,34,5,3345,64,67,8,575,47]

# setting the ranges and no. of intervals 
range=(0,100)
bins=(10)
# plotting a histogram 
plt. hist(ages,bins,range,color="red",histtype='bar',width=0.8)
# x-axis label
plt.xlabel('age')
# fequency labelsese
plt.ylabel('no. of people ')
# plot title 
plt.title('my first chart')
# show chart
plt.show()