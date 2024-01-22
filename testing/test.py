from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import time
from selenium.webdriver.common.by import By


#Trying to keep Chrome open instead of instantly closing
options = Options()
options.add_experimental_option("detach", True)

#Driver being used is the Chrome one
driver = webdriver.Chrome()

driver.get("http://localhost/A2(New)/index.php")

#prints the title of the website GourmetGrocer
print(driver.title)

#Uisng the XPath method it finds the specified element then waits so I can visually identify it works then clicks the element
element = driver.find_element(By.XPATH, "/html/body/nav/a")
time.sleep(8)
element.click()

#Using the XPATH it fins the equipment button in the header and click it
element = driver.find_element(By.XPATH, "/html/body/nav/div/ul/li[2]/a")
element.click()
#sleep is used ahain to allow visualisation
time.sleep(3)
#Next it finds the GourmetGrocer button again and clicks it
element = driver.find_element(By.XPATH, "/html/body/nav/a")
element.click()



time.sleep(20)
