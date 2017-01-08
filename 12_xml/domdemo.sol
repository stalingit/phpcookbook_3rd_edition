include "dom.sol"

/**
	Demo of the DOM PHP extension
	Creating an XML document
	and saving it into a file.
*/	

DOMDocument doc = DOMDocument()
DOMNode root
DOMNode title
DOMText name

root = doc.createElement('book')
root = doc.appendChild(root)

title = doc.createElement('title')
title = root.appendChild(title)

name = doc.createTextNode('This is the title')
name = title.appendChild(name)

print
print "Retrieving only the title:\n"
print doc.saveXML(title)

print
print "Retrieving the whole document:\n"
print doc.saveXML() 

text x = doc.saveXML() 
file f = fopen("testx.xml", "w")
f.write(x)
f.close()



