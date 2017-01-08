/**
	DOM Make
	(c) 2007 Scriptol.com - GNU GPL 2.0 Licence.
	Build an XML file from scratch
*/


text tag = "Internet"
text title = "My article"
text article ="Here is the story I am speaking of..."
text fname="article.xml"

array arr = array(
		"<?xml version=\"1.0\" ?>\n",  
	    "<articles>\n", 
		"  <article tag=\"" +
			tag + "\" title=\"" + 
			title+ "\" >\n",
		article + "\n",
		"  </article>\n",
		"</articles>\n"
		)


file nfile = fopen(fname, "w")
for text x in arr
	nfile.write(x)
/for

nfile.close()





