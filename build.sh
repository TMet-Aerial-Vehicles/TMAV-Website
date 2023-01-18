#!/bin/bash

# Build script for serving static content instead of php files
DEST="./public_html"
html=".html"

# Create destination folder
mkdir -p "$DEST/"

# Execute all php files and save them as html
for f in views/*.php; 
do
    filename=$(echo $f | sed 's/^views\///');
    echo $filename;
    php $f | sed 's:\(<a.*href=".*\)\.php\(".*</a>\):\1\.html\2:g' > "$DEST/${filename/.php/$html}";
    echo "Processing $filename into ${filename/.php/$html}";
done


# Copy all CSS files
for f in *.css; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done


# Copy all JS files
for f in *.js; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done


# Copy all Images
echo "Moving images";
image_folder="$DEST/images/";
mkdir -p $image_folder;
cp -r ./images/. $image_folder;


# Copy redirect file 
cp ./_redirects $DEST;
    

echo "Process complete.";