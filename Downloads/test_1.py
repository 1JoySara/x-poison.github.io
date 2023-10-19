files = open("hello.c", "a")
files.write("Hello Abdul")
files.close()

#lets read the file now
files.open("hello.c", "r")
print(file.read())