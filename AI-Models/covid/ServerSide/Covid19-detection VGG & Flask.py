#!/usr/bin/env python
# coding: utf-8

# ## Libraries

# In[9]:


from tensorflow import keras
#import cv2
from keras.preprocessing import image
import numpy as np
from flask import Flask , request


# ## Load Keras Model

# In[10]:


# Load saved model
model = keras.models.load_model('saved-model/covid_vgg1.h5')


# ## Image Read & Resize Function

# In[11]:


def read_img(img_path):
    img = image.load_img(img_path, target_size = (224, 224)) 
    img = image.img_to_array(img)
    img = np.expand_dims(img, axis = 0)
    return img


# ## Classify images Function for its Class

# In[13]:


def classify_img(img_path):
    img = read_img(img_path)
    res = model.predict(img)
    classes = ['Covid Detection' , 'Your X-Ray is Normal' , 'Your X-Ray Contain Viral Pneumonia']
    MaxPosition=np.argmax(res)  
    prediction_label=classes[MaxPosition]
    return prediction_label


# ## Build Flask API

# In[14]:


app = Flask(__name__)

@app.route('/covid' , methods = ['POST'])
def covid_pred():
    img_path = request.form['path']
    y_pred = classify_img(img_path)
    print('img path:' , img_path)
    print('prediction:' , y_pred)
    return { "Prediction is:": y_pred}
app.run(port=9000)


# In[ ]:




