Toggle64
========

This can parse JSON data for base 64 and VTK. For base 64, currently you can 
just put the JSON file in the directory and run the html file. For the vtk,
currently you can put the JSON file in the directory, along with the vtk file. 
Then, you can use the vtk to obj converter, and then the obj to JS (in JSON 
format) converter. Then you can run the html file.

To render the vtk file, put the vtk file into the build directory and
remove the rest of the JSON files.

To convert from vtk to obj, go to the build directory, and then do

sudo ./vtkOBJWriterExample trytry1.vtk howdy.obj

To convert from obj to python, we can do

sudo python objToJS.py -i howdy.obj -o wutwut.js

The html file (on my local machine, using apache server) is 
http://127.0.0.1/Toggle_git/vtkOBJ/build/ThreejsExampleVTK.html

To render the base 64 file, pu the base 64 file into the build directory 
and remove the rest of the JSON files.

The html file (on my local machine, using apache server) is 
http://127.0.0.1/Toggle_git/vtkOBJ/build/ThreejsExample.html
