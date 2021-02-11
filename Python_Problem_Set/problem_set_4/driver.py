'''
length_of_list = int(input("Oluşturmak istediğiniz listenini uzunluğunu giriniz:"))
myList = []
for i in range(0,length_of_list):
	x = i+1
	data = int(input("Listeye eklemek istediğiniz:{}. veriyi giriniz : ").format((i+1)))
	myList[i] = data
print(myList)

myList.sort()
myList.reverse()
for i in range(0,length_of_list):
	if myList[i]%2 != 0:
		print(myList[i])
		break
'''
#kullandığım IDE console app gibi çalışamadığı için test edemedim önceki kodları fakat 
#çalıştığını düşünüyorum. Bi kontrol edebilirsiniz!


myList = [1,2,3,4,6,8,7,9,5]
myList.sort()
myList.reverse()

for i in range(0,len(myList)):
	if myList[i]%2 != 0:
		print(myList[i])
		break
