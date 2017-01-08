
include "dom.sol"

/**
	DOM Read
	(c) 2007 Scriptol.com - GNU GPL 2.0 Licence.
	Read  an XML file and access the content by DOM's methods and attributes
*/


text name = "article.xml";

DOMDocument doc
DOMNodeList articles
DOMNode node
DOMElement article = null

doc.load(name)



articles = doc.getElementsByTagName("article")		// returns a node list
node= articles.item(0)		// returns the first node
article = node

text tag = article.getAttribute("tag")
text title= article.getAttribute("title")
text content= article.textContent

print "Title:", title
print "Tag:", tag
print "Content:"
print content
