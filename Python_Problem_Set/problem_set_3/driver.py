

myList = [2,4,1,6,4,0,0]
indexCounter = 0
for x in range(0,len(myList)):
	
	if myList[x] == 0 and indexCounter!=0:
		tempValue = myList[x]
		myList[x] = myList[1]
		myList[1] = tempValue
	elif myList[x] == 0:	
		tempValue = myList[x]
		myList[x] = myList[0]
		myList[0] = tempValue
		indexCounter +=1
		print(indexCounter)
print(myList)

#or küçükten büyüğe doğru sıralanışı
myList.sort()
print(myList)

