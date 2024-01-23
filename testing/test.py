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

##driver.get("http://localhost/A2(New)/index.php")
driver.get("http://localhost/A2(New)/add_equipment.php")

#prints the title of the website GourmetGrocer
print(driver.title)

#Using the XPath method it finds the specified element then waits so I can visually identify it works then clicks the element
##element = driver.find_element(By.XPATH, "/html/body/nav/a")
##time.sleep(8)
##element.click()

#This is here due to the fact that Selenium runs too quick and clicks the targetted area before the button loads in, giving an error, this allows the button to load first
time.sleep(3)
#Next it finds the GourmetGrocer button again and clicks it
element = driver.find_element(By.XPATH, "/html/body/nav/a")
element.click()

#Using the XPATH it finds the equipment button in the header and clicks it
##element = driver.find_element(By.XPATH, "/html/body/nav/div/ul/li[2]/a")
##element.click()
#sleep is used again to allow visualisation
##time.sleep(3)
#This is finding another button on the equipment page and clicking it
##element = driver.find_element(By.XPATH, "/html/body/div/a")
##element.click()
##time.sleep(3)



#This finds the Login button on the index page and clicks it
##element = driver.find_element(By.XPATH, "/html/body/nav/div/ul/li[3]/a")
##element.click()
#Sleep is used again for visualisation
##time.sleep(3)
#Next the GourmetGrocer button is clicked on the login page
##element = driver.find_element(By.XPATH, "/html/body/nav/a")
##element.click()



time.sleep(20)
