export default function Update() {
  let $inputUpdate = document.getElementById("input-update"),
  $title = document.getElementById("title"),
  $description = document.getElementById("description")
  
  document.addEventListener("click", (e) => {
    if(e.target.classList.contains("Task__update")){
      e.preventDefault()
      
      let taskTitle = e.target.parentNode.querySelector("h2").textContent,
      taskDescription = e.target.parentNode.querySelector("p").textContent,
      taskId = e.target.parentNode.querySelector(".Task__id").value
      
      $title.value = taskTitle
      $description.value = taskDescription
      
      $inputUpdate.value = taskId
      
      console.log(taskTitle, taskDescription, taskId)
    }
  })
}