import glob
import os
from PIL import Image

def process_images():
    files = glob.glob('assets/mascot/*.jpg')
    print(f"Found {len(files)} files to process.")
    for file in files:
        img = Image.open(file)
        # Convert to RGBA
        img = img.convert("RGBA")
        datas = img.getdata()

        newData = []
        for item in datas:
            # Change all white (also shades of whites) to transparent
            # using a threshold to catch jpeg artifacts
            if item[0] > 235 and item[1] > 235 and item[2] > 235:
                newData.append((255, 255, 255, 0))
            else:
                newData.append(item)

        img.putdata(newData)
        
        base = os.path.splitext(file)[0]
        # output as PNG
        img.save(base + '.png', "PNG")
        
        # Remove the original JPG
        os.remove(file)
        
    print("Done converting 240 files to PNG with transparency.")

if __name__ == "__main__":
    process_images()
