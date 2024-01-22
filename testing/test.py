from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import time

options = Options()
options.add_experimental_option("detach", True)

driver = webdriver.Chrome()

driver.get("http://localhost/A2(New)/index.php")

print(driver.title)

time.sleep(20)