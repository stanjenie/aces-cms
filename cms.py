#!/usr/bin/env python3
import os
blocks = {}

for filename in os.listdir("blocks"):
    if filename.endswith(".xml"):
        f = open(os.path.join("blocks",filename),"r")
        blocks[filename[:-4]] = f.read()
        f.close()

print("Successfully read blocks.")

titles = {
    "about":"About",
    "forms":"Forms",
    "index":"Aces Dance Collective",
    "calendar":"Calendar",
    "form1":"2024 Alum Board Apps",
    "form2":"Aces Buddies - Alumni Sign Up",
    "form3":"Aces Buddies!",
    "form4":"Aces Buddies Feedback (2023-24)",
    "form5":"Aces Alumni Roster",
    "form6":"ADC Registration 2024-25",
    }
    
def title(s):
    if s in titles:
        return titles[s] + " - Aces Dance Collective"
    else:
        return "Aces Dance Collective"
        
for filename in os.listdir("content"):
    if filename.endswith(".xml"):
        f = open(os.path.join("content",filename),"r")
        content = f.read()
        f.close()
        out = """<!DOCTYPE html>\n<html lang="en">\n<head>""" + blocks["head"] + \
            "<title>" + title(filename[:-4]) + \
            """</title>\n</head>\n<body>""" + \
            blocks["navbar"] + content + blocks["footer"] + \
            """</body>\n</html>"""
        outname = filename[:-4] + ".html"
        f = open(outname,"w")
        f.write(out)
        f.close()
        print("Successfully generated %s." % outname)
        
php_intro = """<?php
	session_start();
	if (!isset($_SESSION['loggedin'])) {
		header('Location: members.html');
		exit;
	}
?>"""       
        
for filename in os.listdir("member-content"):
    if filename.endswith(".xml"):
        f = open(os.path.join("member-content",filename),"r")
        content = f.read()
        f.close()
        out = php_intro + """<!DOCTYPE html>\n<html lang="en">\n<head>""" + blocks["head"] + \
            "<title>" + title(filename[:-4]) + \
            """</title>\n</head>\n<body>""" + \
            blocks["navbar-member"] + content + blocks["footer"] + \
            """</body>\n</html>"""
        outname = filename[:-4] + ".php"
        f = open(outname,"w")
        f.write(out)
        f.close()
        print("Successfully generated %s." % outname)
        
print("Successfully generated all content!")
        
