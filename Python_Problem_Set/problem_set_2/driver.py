import re

regex = '^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$'
#hazır kütüphane kodu kullandım. Umarım sorun olmaz :)


def emailCheck(mail):
	if (re.search(regex,mail)):
		print("Valid Email :",mail);
	else:
		print("Invalid Email :",mail);

email = "deneme@deneme.com"
emailCheck(email)