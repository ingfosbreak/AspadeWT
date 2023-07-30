<div class="none" id="profileNav">
  <div class="contents">
    <h1>Contents</h1>
    <h1>profile setting</h1>
    <a href="{{ route('login') }}">
      <h1>logout</h1> 
    </a>
  </div>
</div>






<style>

.none {
    display:none;
}
.cover{
    background:rgba(0,0,0,0);
    position:fixed;
    display:flex;
    flex-direction:column;
}
.contents{
    width:300px;
    height:300px;
    background:#f1f1f1;
    border:2px solid #ccc;
    border-radius:30px;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content: space-evenly;
   
    
}
.close{
    border:2px solid #ccc;
    border-radius:15px;
    padding:5px 15px;
    position:absolute;
    bottom:15px;
    text-align:center;
    left:30%;
    width:100px;
    box-shadow:inset 0px 0px 10px 5px #ccc;
}
</style>


