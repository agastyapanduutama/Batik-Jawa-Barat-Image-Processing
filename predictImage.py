import cv2
import os
import numpy as np
import matplotlib.pyplot as plt

from keras.models import load_model
from keras.preprocessing import image

pathModel = "D:\\OneDrive - Universitas 'Aisyiyah Bandung\\Documents\\Python\\T-SKRIPSI-Handwashing\\batik\\modal\\batik_model.h5"
pathImage = "D:\\OneDrive - Universitas 'Aisyiyah Bandung\\Documents\\Python\\T-SKRIPSI-Handwashing\\batik\\image\\poleng.png"

model = load_model(pathModel)

model.summary()
os.system("cls")


labels = ['Cendrawasih', 'Dayak', 'Ikat celup', 'Insang', 'Kawung', 'Megamendung', 'Parang', 'Poleng', 'Sakar Jagad', 'Tambal']

loadImage = cv2.imread(pathImage)
inFrame = cv2.resize(loadImage, (150, 150))

test_image = image.img_to_array(inFrame)
test_image = np.expand_dims(test_image, axis=0)
result = model.predict(test_image)

cv2.imshow("RGB Video", inFrame)
cv2.waitKey(0)

label = labels[np.argmax(result)]
poseIdx = np.argmax(result, axis=1)
print("Batik terdeteksi :" + str(labels[np.argmax(result)]))
print(result)
