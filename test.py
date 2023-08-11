import imagehash
from PIL import Image

hash1 = imagehash.whash(Image.open('mtgcardImages/AdamantWillMTG.png'))
hash2 = imagehash.whash(Image.open('mtgcardImages/MyImage1.jpg'))
print (hash1)
print (hash2)
print (hash1 - hash2)

