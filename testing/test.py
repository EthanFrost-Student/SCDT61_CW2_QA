from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import time

#Trying to keep Chrome open instead of instantly closing
options = Options()
options.add_experimental_option("detach", True)

#Driver being used is the Chrome one
driver = webdriver.Chrome()

driver.get("http://localhost/A2(New)/index.php")

#prints the title of the website GourmetGrocer
print(driver.title)









time.sleep(20)
