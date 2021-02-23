from SOAPpy import SOAPProxy
client = SOAPProxy('http://localhost/soap/server.php','http://anapaula-soap.com')

print "Bem vindo cliente Python\n"

a = input('Numero 1: ')
b = input('Numero 2: ')


print "\nsoma:", client.soma(a, b)
print "subtracao:", client.sub(a, b)
print "divisao:", client.div(a, b)
print "multiplicacao:", client.multi(a, b) ,"\n"