export default function DeleteAlert() {
  document.addEventListener("click", (e) => {
    if(e.target.classList.contains("Task__delete")){
      e.preventDefault()

      let check = confirm("Are you sure to delete this Task.")

      if(check) {
        e.target.parentNode.submit()
      } else{
        return false
      }
    }
  })
}